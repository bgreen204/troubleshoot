require 'rubygems'
require 'redis'

r = Redis.new

# Create the completion sorted set
if !r.exists(:compl)
    puts "Loading entries in the Redis DB\n"
    File.new('just_products_ws.json').each_line{|n|
        n.downcase!
        n.strip!
        (1..(n.length)).each{|l|
            prefix = n[0...l]
            r.zadd(:compl,0,prefix+"$")
        }
        puts "Adding Records"
        r.zadd(:compl,0,n+"$")
    }
else
    puts "NOT loading entries, there is already a 'compl' key\n"
end