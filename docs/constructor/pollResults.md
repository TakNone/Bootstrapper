# pollResults

**Description** : *Results of poll*

**Layer** : 225

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
			voters : 42,
			recent_voters : array(
				$client->peerUser(
					user_id : -1976253043042443808,
				),
				$client->peerChat(
					chat_id : -8156684137954177518,
				),
				$client->peerChannel(
					channel_id : 2829950629092482911,
				),
			),
		),
	),
	total_voters : 16,
	recent_voters : array(
		$client->peerUser(
			user_id : -3363895072366879161,
		),
		$client->peerChat(
			chat_id : 6227609760892933825,
		),
		$client->peerChannel(
			channel_id : 2385051892306589588,
		),
	),
	solution : 'bEol8F1I6ucgwx3k',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 60,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 47,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 7,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 88,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 70,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 87,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 78,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 73,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 71,
			language : 'e6cut70pZVmWnAFU',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 19,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 50,
			user_id : 4494462964442265153,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 27,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 29,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 57,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 54,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 40,
			document_id : -2218400045864400309,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 87,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 45,
			date : 2,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 49,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 44,
			old_text : 'FbBfNlXs3G2K4M7H',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 27,
		),
	),
	solution_media : $client->messageMediaEmpty(),
);
```