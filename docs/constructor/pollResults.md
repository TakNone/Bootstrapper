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
			option : '??8?LiveProto4??',
			voters : 66,
		),
	),
	total_voters : 91,
	recent_voters : array(
		$client->peerUser(
			user_id : 1545484560471071554,
		),
		$client->peerChat(
			chat_id : 8954924913673809209,
		),
		$client->peerChannel(
			channel_id : -3217344612969471422,
		),
	),
	solution : '1MSuWUTN9iDCGYxZ',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 91,
			length : 39,
		),
		$client->messageEntityMention(
			offset : 66,
			length : 97,
		),
		$client->messageEntityHashtag(
			offset : 63,
			length : 35,
		),
		$client->messageEntityBotCommand(
			offset : 29,
			length : 45,
		),
		$client->messageEntityUrl(
			offset : 49,
			length : 7,
		),
		$client->messageEntityEmail(
			offset : 31,
			length : 45,
		),
		$client->messageEntityBold(
			offset : 81,
			length : 6,
		),
		$client->messageEntityItalic(
			offset : 3,
			length : 85,
		),
		$client->messageEntityCode(
			offset : 77,
			length : 95,
		),
		$client->messageEntityPre(
			offset : 74,
			length : 48,
			language : 'WafA38Ht5eKxIhvE',
		),
		$client->messageEntityTextUrl(
			offset : 10,
			length : 95,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 35,
			length : 62,
			user_id : -8401751509673696469,
		),
		$client->inputMessageEntityMentionName(
			offset : 21,
			length : 100,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 38,
			length : 20,
		),
		$client->messageEntityCashtag(
			offset : 40,
			length : 9,
		),
		$client->messageEntityUnderline(
			offset : 41,
			length : 94,
		),
		$client->messageEntityStrike(
			offset : 88,
			length : 37,
		),
		$client->messageEntityBankCard(
			offset : 38,
			length : 35,
		),
		$client->messageEntitySpoiler(
			offset : 74,
			length : 46,
		),
		$client->messageEntityCustomEmoji(
			offset : 32,
			length : 38,
			document_id : -3881562959352921243,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 69,
			length : 14,
		),
	),
);
```