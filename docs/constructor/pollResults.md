# pollResults

**Description** : *Results of poll*

**Layer** : 233

```tl
pollResults#ba7bb15e flags:# min:flags.0?true has_unread_votes:flags.6?true can_view_stats:flags.7?true results:flags.1?Vector<PollAnswerVoters> total_voters:flags.2?int recent_voters:flags.3?Vector<Peer> solution:flags.4?string solution_entities:flags.4?Vector<MessageEntity> solution_media:flags.5?MessageMedia = PollResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **min** | [`flags.0?true`](type/true) | Similar to min objects, used for poll constructors that are the same for all users so they don't have the option chosen by the current user (you can use messages.getPollResults to get the full poll results) |
| **has_unread_votes** | [`flags.6?true`](type/true) | Whether there are unread votes in this non-anonymous poll, see polls » |
| **can_view_stats** | [`flags.7?true`](type/true) | Whether the current user can view detailed poll statistics » |
| **results** | [`flags.1?Vector<PollAnswerVoters>`](type/PollAnswerVoters) | Poll results |
| **total_voters** | [`flags.2?int`](type/int) | Total number of people that voted in the poll |
| **recent_voters** | [`flags.3?Vector<Peer>`](type/Peer) | IDs of the last users that recently voted in the poll |
| **solution** | [`flags.4?string`](type/string) | Explanation of quiz solution |
| **solution_entities** | [`flags.4?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text in quiz solution |
| **solution_media** | [`flags.5?MessageMedia`](type/MessageMedia) | Optional media attachment shown alongside the quiz solution explanation |

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
			voters : 15,
			recent_voters : array(
				$client->peerUser(
					user_id : 8247003023008890396,
				),
				$client->peerChat(
					chat_id : 8924202258906962818,
				),
				$client->peerChannel(
					channel_id : -3699054995062058424,
				),
			),
		),
	),
	total_voters : 98,
	recent_voters : array(
		$client->peerUser(
			user_id : 8457190698552442637,
		),
		$client->peerChat(
			chat_id : -6269969183830040473,
		),
		$client->peerChannel(
			channel_id : -1254561004690510636,
		),
	),
	solution : 'JABDzHYr6aZF8gkf',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 55,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 14,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 23,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 22,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 2,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 98,
			language : 'zYnKJvgP4fHGcw1U',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 87,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 31,
			user_id : -7926658408747915479,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 90,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 42,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 76,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 48,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 76,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 75,
			document_id : 490407535434833997,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 24,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 14,
			date : 62,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 23,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 47,
			old_text : '2ptXCUAonlcxQbPy',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 57,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 7,
		),
	),
	solution_media : $client->messageMediaEmpty(),
);
```