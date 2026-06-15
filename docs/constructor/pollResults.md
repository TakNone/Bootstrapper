# pollResults

**Description** : *Results of poll*

**Layer** : 227

```tl
pollResults#ba7bb15e flags:# min:flags.0?true has_unread_votes:flags.6?true can_view_stats:flags.7?true results:flags.1?Vector<PollAnswerVoters> total_voters:flags.2?int recent_voters:flags.3?Vector<Peer> solution:flags.4?string solution_entities:flags.4?Vector<MessageEntity> solution_media:flags.5?MessageMedia = PollResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **min** | [`flags.0?true`](type/true) | Similar to min objects, used for poll constructors that are the same for all users so they don't have the option chosen by the current user (you can use messages.getPollResults to get the full poll results) |
| **has_unread_votes** | [`flags.6?true`](type/true) | NOTHING |
| **can_view_stats** | [`flags.7?true`](type/true) | NOTHING |
| **results** | [`flags.1?Vector<PollAnswerVoters>`](type/PollAnswerVoters) | Poll results |
| **total_voters** | [`flags.2?int`](type/int) | Total number of people that voted in the poll |
| **recent_voters** | [`flags.3?Vector<Peer>`](type/Peer) | IDs of the last users that recently voted in the poll |
| **solution** | [`flags.4?string`](type/string) | Explanation of quiz solution |
| **solution_entities** | [`flags.4?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text in quiz solution |
| **solution_media** | [`flags.5?MessageMedia`](type/MessageMedia) | NOTHING |

---

## Type

[PollResults](type/PollResults)

---

## Example

```php
$pollResults = $client->pollResults(
	min : true,
	has_unread_votes : true,
	can_view_stats : true,
	results : array(
		$client->pollAnswerVoters(
			chosen : true,
			correct : true,
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			voters : 41,
			recent_voters : array(
				$client->peerUser(
					user_id : -2985834436741538966,
				),
				$client->peerChat(
					chat_id : -5307197289969147435,
				),
				$client->peerChannel(
					channel_id : -8393426426479968524,
				),
			),
		),
	),
	total_voters : 97,
	recent_voters : array(
		$client->peerUser(
			user_id : -5862748402547850394,
		),
		$client->peerChat(
			chat_id : 512045780095607890,
		),
		$client->peerChannel(
			channel_id : -508873555012056854,
		),
	),
	solution : '1PW0AyHrL7MUIRqK',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 16,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 62,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 27,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 23,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 49,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 77,
			language : 'EHm2yIRgSBjGNrqQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 33,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 37,
			user_id : 8971008083834216808,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 99,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 50,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 68,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 15,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 97,
			document_id : -7721950728669651170,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 11,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 98,
			date : 39,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 96,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 62,
			old_text : 'XN6itmjCLcQbOdEo',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 15,
		),
	),
	solution_media : $client->messageMediaEmpty(),
);
```