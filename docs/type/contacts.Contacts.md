# contacts.Contacts

**Description** : *Info on the current user's contact list*

**Layer** : 211

```tl
contacts.contactsNotModified#b74ba9d2 = contacts.Contacts;
contacts.contacts#eae87e42 contacts:Vector<Contact> saved_count:int users:Vector<User> = contacts.Contacts;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**contacts.contactsNotModified**](constructor/contacts.contactsNotModified) | Contact list on the server is the same as the list on the client |
| [**contacts.contacts**](constructor/contacts.contacts) | The current user's contact list and info on users |