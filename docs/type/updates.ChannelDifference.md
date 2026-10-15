# updates.ChannelDifference

**Description** : *Contains the difference \(new messages\) between our local channel state and the remote state*

**Layer** : 229

```tl
updates.channelDifferenceEmpty#3e11affb flags:# final:flags.0?true pts:int timeout:flags.1?int = updates.ChannelDifference;
updates.channelDifferenceTooLong#a4bcc6fe flags:# final:flags.0?true timeout:flags.1?int dialog:Dialog messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
updates.channelDifference#2064674e flags:# final:flags.0?true pts:int timeout:flags.1?int new_messages:Vector<Message> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**updates.channelDifferenceEmpty**](constructor/updates.channelDifferenceEmpty) | There are no new updates |
| [**updates.channelDifferenceTooLong**](constructor/updates.channelDifferenceTooLong) | The passed pts is too old: one or more updates starting from the specified PTS were deleted from the message box of this channel.For supergroups/channels, this usually happens for updates older than latestPts - 100000 (though do not rely on this value, it's a server-side implementation detail that may change, and should not be used by clients in any way) |
| [**updates.channelDifference**](constructor/updates.channelDifference) | The new updates |