# channelParticipantsMentions

**Description** : *This filter is used when looking for supergroup members to mention\.
This filter will automatically remove anonymous admins, and return even non\-participant users that replied to a specific thread through the comment section of a channel*

**Layer** : 216

```tl
channelParticipantsMentions#e04b5ceb flags:# q:flags.0?string top_msg_id:flags.1?int = ChannelParticipantsFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **q** | [`flags.0?string`](type/string) | Filter by user name or username |
| **top_msg_id** | [`flags.1?int`](type/int) | Look only for users that posted in this thread |

---

## Type

[ChannelParticipantsFilter](type/ChannelParticipantsFilter)

---

## Example

```php
$channelParticipantsFilter = $client->channelParticipantsMentions(
	q : '8P5VzmdHj0GYuceI',
	top_msg_id : 18,
);
```