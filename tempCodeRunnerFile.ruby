
def print_elements(list)
    index = 0
    puts "Printing list"
    while index < list.size
        puts "#{index+1} element is: " + list[index]
        index += 1
    end
end


def main
    list = []
    index = 0
    count = 10
    while (index < count) 
        puts "please enter an element: "
        list << gets
        puts "added: " + list[index]
        index += 1
       
    end
    print_elements(list)
end

main