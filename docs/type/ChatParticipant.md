# ChatParticipant

**Description** : *Details of a group member*

**Layer** : 225

```tl
chatParticipant#38e79fde flags:# user_id:long inviter_id:long date:int rank:flags.0?string = ChatParticipant;
chatParticipantCreator#e1f867b8 flags:# user_id:long rank:flags.0?string = ChatParticipant;
chatParticipantAdmin#360d5d2 flags:# user_id:long inviter_id:long date:int rank:flags.0?string = ChatParticipant;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**chatParticipant**](constructor/chatParticipant) | Group member |
| [**chatParticipantCreator**](constructor/chatParticipantCreator) | Represents the creator of the group |
| [**chatParticipantAdmin**](constructor/chatParticipantAdmin) | Chat admin |