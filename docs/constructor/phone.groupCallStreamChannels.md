# phone.groupCallStreamChannels

**Description** : *Info about RTMP streams in a group call or livestream*

**Layer** : 227

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
			channel : 61,
			scale : 53,
			last_timestamp_ms : 7846692599863922508,
		),
	),
);
```