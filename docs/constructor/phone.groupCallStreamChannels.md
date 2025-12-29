# phone.groupCallStreamChannels

**Description** : *Info about RTMP streams in a group call or livestream*

**Layer** : 218

```tl
phone.groupCallStreamChannels#d0e482b2 channels:Vector<GroupCallStreamChannel> = phone.GroupCallStreamChannels;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channels</mark> | [`Vector<GroupCallStreamChannel>`](type/GroupCallStreamChannel) | RTMP streams |

---

## Type

[phone.GroupCallStreamChannels](type/phone.GroupCallStreamChannels)

---

## Example

```php
$phoneGroupCallStreamChannels = $client->phone->groupCallStreamChannels(
	channels : array(
		$client->groupCallStreamChannel(
			channel : 13,
			scale : 76,
			last_timestamp_ms : -3440838396710903733,
		),
	),
);
```