# contacts.Blocked

**Description** : *Info on users from the current user's black list*

**Layer** : 211

```tl
contacts.blocked#ade1591 blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
contacts.blockedSlice#e1664194 count:int blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**contacts.blocked**](constructor/contacts.blocked) | Full list of blocked users |
| [**contacts.blockedSlice**](constructor/contacts.blockedSlice) | Incomplete list of blocked users |