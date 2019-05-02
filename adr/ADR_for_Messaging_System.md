# Choice of Messaging System

# Status: accepted

# Context:

Our choice for messaging was the request response messaging system. In this system, the client sends a request to the server which returns a response back to the client. This system is simple and not overbearing while still being a powerful messaging tool.

# Decision:

Request-response was implemented in our application because we use a straightforward client-server architecture. When a user wishes to update customer information, a request is sent to the server (which also communicates with the database) and then an appropriate response is returned.


# Consequences:

Being a simple application, request-response is a suitable messaging system due to its simple yet powerful nature. It does not require us to add any unnecessary additions to the application.
