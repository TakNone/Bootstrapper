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
			voters : 100,
			recent_voters : array(
				$client->peerUser(
					user_id : 4297864711402804779,
				),
				$client->peerChat(
					chat_id : 6584643738946438228,
				),
				$client->peerChannel(
					channel_id : -2760720476763525179,
				),
			),
		),
	),
	total_voters : 56,
	recent_voters : array(
		$client->peerUser(
			user_id : -8189604023834636448,
		),
		$client->peerChat(
			chat_id : 2981933205963553832,
		),
		$client->peerChannel(
			channel_id : -7669008122191514554,
		),
	),
	solution : 'y8XnQaopKhs2L5Mw',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 92,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 23,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 20,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 58,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 74,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 62,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 55,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 74,
			language : '2HgEoNR9eQTqsa5V',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 33,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 18,
			user_id : -4658524720184672567,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 9,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 7,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 32,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 17,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 54,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 34,
			document_id : 6353533825593452234,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 25,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 40,
			date : 11,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 92,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 3,
			old_text : 'fPlV7TON6AbyXi9j',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 95,
		),
	),
	solution_media : $client->messageMediaEmpty(),
);
```