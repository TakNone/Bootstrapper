# phone.GroupParticipants

**Description** : *Info about the participants of a group call or livestream*

**Layer** : 229

```tl
phone.groupParticipants#f47751b6 count:int participants:Vector<GroupCallParticipant> next_offset:string chats:Vector<Chat> users:Vector<User> version:int = phone.GroupParticipants;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**phone.groupParticipants**](constructor/phone.groupParticipants) | Contains a page of group call participants, see getting info about a group call » |