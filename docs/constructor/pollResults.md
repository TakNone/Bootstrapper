# pollResults

**Description** : *Results of poll*

**Layer** : 218

```tl
pollResults#7adf2420 flags:# min:flags.0?true results:flags.1?Vector<PollAnswerVoters> total_voters:flags.2?int recent_voters:flags.3?Vector<Peer> solution:flags.4?string solution_entities:flags.4?Vector<MessageEntity> = PollResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **min** | [`flags.0?true`](type/true) | Similar to min objects, used for poll constructors that are the same for all users so they don't have the option chosen by the current user (you can use messages.getPollResults to get the full poll results) |
| **results** | [`flags.1?Vector<PollAnswerVoters>`](type/PollAnswerVoters) | Poll results |
| **total_voters** | [`flags.2?int`](type/int) | Total number of people that voted in the poll |
| **recent_voters** | [`flags.3?Vector<Peer>`](type/Peer) | IDs of the last users that recently voted in the poll |
| **solution** | [`flags.4?string`](type/string) | Explanation of quiz solution |
| **solution_entities** | [`flags.4?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text in quiz solution |

---

## Type

[PollResults](type/PollResults)

---

## Example

```php
$pollResults = $client->pollResults(
	min : true,
	results : array(
		$client->pollAnswerVoters(
			chosen : true,
			correct : true,
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			voters : 69,
		),
	),
	total_voters : 65,
	recent_voters : array(
		$client->peerUser(
			user_id : -4989985805197879938,
		),
		$client->peerChat(
			chat_id : 385671657485560551,
		),
		$client->peerChannel(
			channel_id : -8833555445067844870,
		),
	),
	solution : 'ybrAtQTBLwOHm31k',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 68,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 6,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 59,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 35,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 29,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 60,
			language : 'IlYOXeofcu5TES17',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 38,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 54,
			user_id : 8810573025021424755,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 37,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 83,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 57,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 45,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 44,
			document_id : 7437983107758146139,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 4,
		),
	),
);
```