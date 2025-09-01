# pollResults

**Description** : *Results of poll*

**Layer** : 214

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
			voters : 76,
		),
	),
	total_voters : 57,
	recent_voters : array(
		$client->peerUser(
			user_id : 2816543899410599990,
		),
		$client->peerChat(
			chat_id : 8607147527185921746,
		),
		$client->peerChannel(
			channel_id : 1362621374735175149,
		),
	),
	solution : '07sR2m5JBFufXvKi',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 94,
			length : 12,
		),
		$client->messageEntityMention(
			offset : 26,
			length : 65,
		),
		$client->messageEntityHashtag(
			offset : 65,
			length : 39,
		),
		$client->messageEntityBotCommand(
			offset : 60,
			length : 32,
		),
		$client->messageEntityUrl(
			offset : 34,
			length : 86,
		),
		$client->messageEntityEmail(
			offset : 1,
			length : 19,
		),
		$client->messageEntityBold(
			offset : 28,
			length : 24,
		),
		$client->messageEntityItalic(
			offset : 81,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 60,
			length : 76,
		),
		$client->messageEntityPre(
			offset : 57,
			length : 32,
			language : 'CvUqgf4kWM1FZr9l',
		),
		$client->messageEntityTextUrl(
			offset : 49,
			length : 24,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 34,
			length : 35,
			user_id : -4930699140519227634,
		),
		$client->inputMessageEntityMentionName(
			offset : 74,
			length : 94,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 8,
			length : 33,
		),
		$client->messageEntityCashtag(
			offset : 88,
			length : 61,
		),
		$client->messageEntityUnderline(
			offset : 70,
			length : 30,
		),
		$client->messageEntityStrike(
			offset : 42,
			length : 93,
		),
		$client->messageEntityBankCard(
			offset : 67,
			length : 30,
		),
		$client->messageEntitySpoiler(
			offset : 78,
			length : 84,
		),
		$client->messageEntityCustomEmoji(
			offset : 65,
			length : 15,
			document_id : 8961210370396730684,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 96,
			length : 55,
		),
	),
);
```