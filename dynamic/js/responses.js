function getBotResponse(input) {
    // Simple responses
    if (input == "hello" ||input == "Hello") {
        return "Hello there! How can I help you?";
    } else if (input == "Can you help me?") {
        return "Of course, what do you want ?";
    } else if (input == "What are your opening hours?") {
        return "Usually from 7:00 to 19:00 sir.";   
    } else if (input == "How can add something to cart ?") {
        return "Click to 'add to cart' on product. ";
    } else if (input == "How can add something to cart ?") {
          return "Usually from 7:00 to 19:00 sir .";
    } else {
        return "Try asking something else!";
    }
}