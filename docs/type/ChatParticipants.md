# ChatParticipants

**Description** : *Contains the full list of members of basic groups &raquo;; is NOT usable for supergroups/channels*

**Layer** : 229

```tl
chatParticipantsForbidden#8763d3e1 flags:# chat_id:long self_participant:flags.0?ChatParticipant = ChatParticipants;
chatParticipants#3cbc93f8 chat_id:long participants:Vector<ChatParticipant> version:int = ChatParticipants;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**chatParticipantsForbidden**](constructor/chatParticipantsForbidden) | The full list of members of basic groups » is not available to you, because you were banned |
| [**chatParticipants**](constructor/chatParticipants) | Contains the full list of members of basic groups »; is NOT usable for supergroups/channels |