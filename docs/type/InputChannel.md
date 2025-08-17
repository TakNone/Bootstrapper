# InputChannel

**Description** : *Represents a channel*

**Layer** : 211

```tl
inputChannelEmpty#ee8c1e86 = InputChannel;
inputChannel#f35aec28 channel_id:long access_hash:long = InputChannel;
inputChannelFromMessage#5b934f9d peer:InputPeer msg_id:int channel_id:long = InputChannel;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputChannelEmpty**](constructor/inputChannelEmpty) | Represents the absence of a channel |
| [**inputChannel**](constructor/inputChannel) | Represents a channel |
| [**inputChannelFromMessage**](constructor/inputChannelFromMessage) | Defines a min channel that was seen in a certain message of a certain chat |