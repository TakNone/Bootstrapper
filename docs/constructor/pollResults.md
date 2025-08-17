# pollResults

**Description** : *Results of poll*

**Layer** : 211

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
			option : '?_3??LiveProto??MN',
			voters : 81,
		),
	),
	total_voters : 67,
	recent_voters : array(
		$client->peerUser(
			user_id : 211133302173774889,
		),
		$client->peerChat(
			chat_id : -6646228903253715936,
		),
		$client->peerChannel(
			channel_id : -2376880484322430176,
		),
	),
	solution : '9w7Bn5lyig0jtr4N',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 66,
			length : 83,
		),
		$client->messageEntityMention(
			offset : 1,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 68,
			length : 82,
		),
		$client->messageEntityBotCommand(
			offset : 49,
			length : 66,
		),
		$client->messageEntityUrl(
			offset : 72,
			length : 52,
		),
		$client->messageEntityEmail(
			offset : 8,
			length : 50,
		),
		$client->messageEntityBold(
			offset : 99,
			length : 25,
		),
		$client->messageEntityItalic(
			offset : 21,
			length : 32,
		),
		$client->messageEntityCode(
			offset : 67,
			length : 11,
		),
		$client->messageEntityPre(
			offset : 93,
			length : 42,
			language : 'CXmtDA82IPaFh0pV',
		),
		$client->messageEntityTextUrl(
			offset : 85,
			length : 55,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 2,
			length : 27,
			user_id : -1656009065997127399,
		),
		$client->inputMessageEntityMentionName(
			offset : 34,
			length : 35,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 7,
			length : 45,
		),
		$client->messageEntityCashtag(
			offset : 65,
			length : 41,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 75,
		),
		$client->messageEntityStrike(
			offset : 49,
			length : 28,
		),
		$client->messageEntityBankCard(
			offset : 5,
			length : 11,
		),
		$client->messageEntitySpoiler(
			offset : 89,
			length : 53,
		),
		$client->messageEntityCustomEmoji(
			offset : 66,
			length : 58,
			document_id : -4387040494065604082,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 83,
			length : 7,
		),
	),
);
```