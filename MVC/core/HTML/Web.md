# HTML
## Content:
1. [How The Web Works.](#how-the-web-works)
1. [HTTP.](#http)
1. [Web Servers.](#web-servers)
1. [DNS.](#dns)

---

## How The Web Works:
The web browser connects to the web server and sends an HTTP request (via the protocol stack) for the desired web page. The web server receives the request and checks for the desired page. If the page exists, the web server sends it. If the server cannot find the requested page, it will send an HTTP 404 error message.

The World Wide Web (WWW) is a system of interconnected hypertext documents accessed via the Internet. Here's a simplified overview of how it works:

1. **Client-Server Model**: The web operates on a client-server model. When you, as a user, open a web browser and type in a URL (Uniform Resource Locator) or click on a link, your browser acts as a client, and it sends a request to a server.

2. **Domain Name System (DNS)**: If you type a URL, such as "www.example.com," your browser needs to find the IP address associated with that domain name. It does this by querying the DNS system, which translates human-readable domain names into machine-readable IP addresses.

3. **HTTP/HTTPS Protocol**: Once your browser knows the IP address of the server hosting the website, it establishes a connection using the HTTP (Hypertext Transfer Protocol) or HTTPS (HTTP Secure) protocol. HTTPS provides a secure connection through SSL/TLS encryption.

4. **Request-Response Cycle**: Your browser sends a request to the server, specifying the resource it wants to access (e.g., a web page, image, video). The server processes the request and sends back a response containing the requested resource. This response includes metadata such as HTTP headers and the actual content of the resource.

5. **HTML, CSS, JavaScript**: The resource sent back by the server is often an HTML (Hypertext Markup Language) document. HTML provides the structure of the web page, while CSS (Cascading Style Sheets) defines its presentation (layout, fonts, colors, etc.), and JavaScript adds interactivity and dynamic behavior to the page.

6. **Rendering**: Once the browser receives the HTML, CSS, and JavaScript files, it parses and interprets them to render the web page visually. The browser constructs the Document Object Model (DOM) based on the HTML structure, applies styles from CSS, and executes JavaScript to add interactivity.

7. **Additional Resources**: A web page often contains references to additional resources such as images, videos, stylesheets, and scripts. The browser sends additional requests for these resources, and the server responds with the corresponding files.

8. **Caching**: To improve performance, browsers and servers often cache resources. This means that if you visit the same website again, some resources may be loaded from your local cache rather than being requested from the server again.

9. **Hyperlinks**: Web pages are interconnected through hyperlinks. When you click on a hyperlink, your browser repeats the process described above to retrieve and display the linked page.

Overall, the web works as a distributed system of interconnected servers and clients communicating via standardized protocols, enabling the retrieval and display of hypertext documents and associated resources.

---

## HTTP:
HTTP (Hyper Text Transfer Protocol) is a protocol for fetching resources such as HTML documents. It is the foundation of any data exchange on the Web and it is a client-server protocol, which means requests are initiated by the recipient, usually the Web browser. A complete document is reconstructed from the different sub-documents fetched, for instance, text, layout description, images, videos, scripts, and more. 

Clients and servers communicate by exchanging individual messages (as opposed to a stream of data). The messages sent by the client, usually a Web browser, are called requests and the messages sent by the server as an answer are called responses.  

Designed in the early 1990s, HTTP is an extensible protocol which has evolved over time. It is an application layer protocol that is sent over TCP, or over a TLS-encrypted TCP connection, though any reliable transport protocol could theoretically be used. Due to its extensibility, it is used to not only fetch hypertext documents, but also images and videos or to post content to servers, like with HTML form results. HTTP can also be used to fetch parts of documents to update Web pages on demand. 

![image](https://developer.mozilla.org/en-US/docs/Web/HTTP/Overview/http-layers.png)


### Conmponents of HTTP-Based Systems:
* Client.
* Proxies.
* Servers.



---
## Web Servers:
They are on the opposite side of the communication channel, which serves the document as requested by the client. A server appears as only a single machine virtually; but it may actually be a collection of servers sharing the load (load balancing), or other software (such as caches, a database server, or e-commerce servers), totally or partially generating the document on demand.

A server is not necessarily a single machine, but several server software instances can be hosted on the same machine. With HTTP/1.1 and the Host header, they may even share the same IP address. 

Here are some key points about web servers:

1. **Software or Hardware**: A web server can be implemented as software running on a computer or as a dedicated hardware device designed for serving web content.

2. **HTTP/HTTPS Protocol**: Web servers primarily communicate using the HTTP (Hypertext Transfer Protocol) or its secure version, HTTPS (HTTP Secure). They listen for incoming requests on designated ports (typically port 80 for HTTP and port 443 for HTTPS).

3. **Handling Requests**: When a web server receives a request from a client (such as a web browser), it processes the request and returns an appropriate response. Requests can be for various resources, including web pages, images, videos, files, or data stored on the server.

4. **Content Delivery**: Web servers store and deliver content in response to client requests. This content may be static, such as HTML files, images, or CSS stylesheets, or dynamic, generated on-the-fly by server-side scripts (e.g., PHP, Python, Ruby) or web application frameworks (e.g., Django, Ruby on Rails).

5. **Configuration and Management**: Web servers are typically configurable to meet the specific needs of the websites or applications they serve. Administrators can set up various parameters, such as security settings, caching rules, compression, and authentication mechanisms.

6. **Examples of Web Servers**: Some popular web server software includes Apache HTTP Server, Nginx, Microsoft Internet Information Services (IIS), and LiteSpeed Web Server. Each has its own features, performance characteristics, and use cases.

7. **Scalability and Load Balancing**: To handle large amounts of traffic or ensure high availability, web servers can be deployed in clusters and managed using load balancing techniques. Load balancers distribute incoming requests across multiple servers to optimize performance and prevent overload.

In summary, a web server plays a crucial role in delivering web content to users, processing requests, and serving as the backbone of the World Wide Web infrastructure.


---
## DNS: 
Domain Names and Address Resolution, what if you don't know the IP address of the computer you want to connect to? What if the you need to access a web server referred to as www.anothercomputer.com? How does your web browser know where on the Internet this computer lives? The answer to all these questions is the Domain Name Service or DNS. The DNS is a distributed database which keeps track of computer's names and their corresponding IP addresses on the Internet.

Many computers connected to the Internet host part of the DNS database and the software that allows others to access it. These computers are known as DNS servers. No DNS server contains the entire database; they only contain a subset of it. If a DNS server does not contain the domain name requested by another computer, the DNS server re-directs the requesting computer to another DNS server. 

The Domain Name Service is structured as a hierarchy similar to the IP routing hierarchy. The computer requesting a name resolution will be re-directed 'up' the hierarchy until a DNS server is found that can resolve the domain name in the request. Figure 6 illustrates a portion of the hierarchy. At the top of the tree are the domain roots. Some of the older, more common domains are seen near the top. What is not shown are the multitude of DNS servers around the world which form the rest of the hierarchy.

When an Internet connection is setup (e.g. for a LAN or Dial-Up Networking in Windows), one primary and one or more secondary DNS servers are usually specified as part of the installation. This way, any Internet applications that need domain name resolution will be able to function correctly. For example, when you enter a web address into your web browser, the browser first connects to your primary DNS server. After obtaining the IP address for the domain name you entered, the browser then connects to the target computer and requests the web page you wanted. 


---
## references in order of appearance:
1. [Stanford University](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjv25TO-NCEAxUCTaQEHf5aD8MQFnoECBAQAw&url=https%3A%2F%2Fweb.stanford.edu%2Fclass%2Fmsande91si%2Fwww-spr04%2Freadings%2Fweek1%2FInternetWhitepaper.htm&usg=AOvVaw1b69FiF1Jh8iQmn8O_RuCe&opi=89978449).
1. [ChatGPT](https://chat.openai.com/share/6caf9550-28a1-4c66-af53-eea6adf2c1bd).
1. [Mdn Web Docs](https://developer.mozilla.org/en-US/docs/Web/HTTP/Overview).
1. ChatGPT.
1. Stanford University.