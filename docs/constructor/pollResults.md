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
			voters : 95,
		),
	),
	total_voters : 19,
	recent_voters : array(
		$client->peerUser(
			user_id : -1493883467911901063,
		),
		$client->peerChat(
			chat_id : 4505508997267790396,
		),
		$client->peerChannel(
			channel_id : -7992803495645594569,
		),
	),
	solution : 'k65yQouWYzfIr3we',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 56,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 40,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 5,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 11,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 7,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 92,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 35,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 20,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 68,
			language : 'dCSVGIZgAKcT0e61',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 70,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 45,
			user_id : -5825197475825868650,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 29,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 89,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 58,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 44,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 81,
			document_id : -1600874970923958270,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 56,
		),
	),
);
```