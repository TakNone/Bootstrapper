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
			voters : 8,
		),
	),
	total_voters : 6,
	recent_voters : array(
		$client->peerUser(
			user_id : -2608007729508669158,
		),
		$client->peerChat(
			chat_id : 7529941542459504765,
		),
		$client->peerChannel(
			channel_id : -5162309313144330909,
		),
	),
	solution : 'np53elcRvDaPwVUH',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 89,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 58,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 49,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 87,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 7,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 47,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 37,
			language : 'JE75sCvbpTUxOGfq',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 51,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 13,
			user_id : 8226755276779500282,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 11,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 80,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 1,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 63,
			document_id : 3862107750324133985,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 63,
		),
	),
);
```