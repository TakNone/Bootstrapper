# ChatParticipant

**Description** : *Details of a group member*

**Layer** : 211

```tl
chatParticipant#c02d4007 user_id:long inviter_id:long date:int = ChatParticipant;
chatParticipantCreator#e46bcee4 user_id:long = ChatParticipant;
chatParticipantAdmin#a0933f5b user_id:long inviter_id:long date:int = ChatParticipant;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**chatParticipant**](constructor/chatParticipant) | Group member |
| [**chatParticipantCreator**](constructor/chatParticipantCreator) | Represents the creator of the group |
| [**chatParticipantAdmin**](constructor/chatParticipantAdmin) | Chat admin |