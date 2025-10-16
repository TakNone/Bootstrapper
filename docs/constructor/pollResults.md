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
			voters : 60,
		),
	),
	total_voters : 92,
	recent_voters : array(
		$client->peerUser(
			user_id : 5626573218865113488,
		),
		$client->peerChat(
			chat_id : -6623470343198622236,
		),
		$client->peerChannel(
			channel_id : 3144799812258961189,
		),
	),
	solution : 'LRZDpmfXTCKQ6cu4',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 87,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 85,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 71,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 100,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 38,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 95,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 13,
			language : '4QRj2oGAIgKnYMLr',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 73,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : 7762805515064607090,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 75,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 24,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 4,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 96,
			document_id : -2686722489704910740,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 54,
		),
	),
);
```