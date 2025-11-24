# channelMessagesFilter

**Description** : *Filter for getting only certain types of channel messages*

**Layer** : 218

```tl
channelMessagesFilter#cd77d957 flags:# exclude_new_messages:flags.1?true ranges:Vector<MessageRange> = ChannelMessagesFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **exclude_new_messages** | [`flags.1?true`](type/true) | Whether to exclude new messages from the search |
| <mark>ranges</mark> | [`Vector<MessageRange>`](type/MessageRange) | A range of messages to fetch |

---

## Type

[ChannelMessagesFilter](type/ChannelMessagesFilter)

---

## Example

```php
$channelMessagesFilter = $client->channelMessagesFilter(
	exclude_new_messages : true,
	ranges : array(
		$client->messageRange(
			min_id : 83,
			max_id : 72,
		),
	),
);
```