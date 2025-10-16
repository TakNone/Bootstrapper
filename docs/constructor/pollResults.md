# pollResults

**Description** : *Results of poll*

**Layer** : 216

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
			voters : 25,
		),
	),
	total_voters : 34,
	recent_voters : array(
		$client->peerUser(
			user_id : -1873182866878726270,
		),
		$client->peerChat(
			chat_id : 6589984698342355373,
		),
		$client->peerChannel(
			channel_id : -7377967034291735733,
		),
	),
	solution : 'mgpWG0juD1M7F9Y6',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 98,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 29,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 49,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 10,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 82,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 79,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 75,
			language : 'JHrlNRCPWiokXpA0',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 98,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : 4302693588989197280,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 41,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 60,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 73,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 88,
			document_id : -3226398093677599826,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 66,
		),
	),
);
```