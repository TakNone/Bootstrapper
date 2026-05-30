# pollResults

**Description** : *Results of poll*

**Layer** : 222

```tl
pollResults#7adf2420 flags:# min:flags.0?true results:flags.1?Vector<PollAnswerVoters> total_voters:flags.2?int recent_voters:flags.3?Vector<Peer> solution:flags.4?string solution_entities:flags.4?Vector<MessageEntity> = PollResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
			voters : 93,
		),
	),
	total_voters : 7,
	recent_voters : array(
		$client->peerUser(
			user_id : -8874911771689055845,
		),
		$client->peerChat(
			chat_id : 8164446382059438840,
		),
		$client->peerChannel(
			channel_id : 8748033393775768798,
		),
	),
	solution : 'fXhaPY1TDFi5Mbse',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 81,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 8,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 76,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 80,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 14,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 100,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 32,
			language : 't0PQpWvlBGAwcNk1',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 98,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 68,
			user_id : 6591820874246302816,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 73,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 45,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 41,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 49,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 67,
			document_id : -562023356020178377,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 60,
		),
	),
);
```