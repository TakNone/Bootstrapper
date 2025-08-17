# ChannelMessagesFilter

**Description** : *Filter for fetching only certain types of channel messages*

**Layer** : 211

```tl
channelMessagesFilterEmpty#94d42ee7 = ChannelMessagesFilter;
channelMessagesFilter#cd77d957 flags:# exclude_new_messages:flags.1?true ranges:Vector<MessageRange> = ChannelMessagesFilter;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**channelMessagesFilterEmpty**](constructor/channelMessagesFilterEmpty) | No filter |
| [**channelMessagesFilter**](constructor/channelMessagesFilter) | Filter for getting only certain types of channel messages |