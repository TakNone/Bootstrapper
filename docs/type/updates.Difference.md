# updates.Difference

**Description** : *Occurred changes*

**Layer** : 211

```tl
updates.differenceEmpty#5d75a138 date:int seq:int = updates.Difference;
updates.difference#f49ca0 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> state:updates.State = updates.Difference;
updates.differenceSlice#a8fb1981 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> intermediate_state:updates.State = updates.Difference;
updates.differenceTooLong#4afe8f6d pts:int = updates.Difference;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**updates.differenceEmpty**](constructor/updates.differenceEmpty) | No events |
| [**updates.difference**](constructor/updates.difference) | Full list of occurred events |
| [**updates.differenceSlice**](constructor/updates.differenceSlice) | Incomplete list of occurred events |
| [**updates.differenceTooLong**](constructor/updates.differenceTooLong) | The difference is too long, and the specified state must be used to refetch updates |