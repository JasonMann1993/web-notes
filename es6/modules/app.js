import User, { createURL, gravatr} from "./src/user";

const jason = new User('jason', 'jasonmannn@outlook.com')
const profile = createURL(jason.name);
const image = gravatr(jason.email);
console.log(jason,profile,image)