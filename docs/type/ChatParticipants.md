# ChatParticipants

**Description** : *Object contains info on group members*

**Layer** : 211

```tl
chatParticipantsForbidden#8763d3e1 flags:# chat_id:long self_participant:flags.0?ChatParticipant = ChatParticipants;
chatParticipants#3cbc93f8 chat_id:long participants:Vector<ChatParticipant> version:int = ChatParticipants;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**chatParticipantsForbidden**](constructor/chatParticipantsForbidden) | Info on members is unavailable |
| [**chatParticipants**](constructor/chatParticipants) | Group members |