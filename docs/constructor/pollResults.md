# pollResults

**Description** : *Results of poll*

**Layer** : 229

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
			voters : 64,
			recent_voters : array(
				$client->peerUser(
					user_id : -1419832632061866360,
				),
				$client->peerChat(
					chat_id : -2885474533875389040,
				),
				$client->peerChannel(
					channel_id : 406867280770451049,
				),
			),
		),
	),
	total_voters : 35,
	recent_voters : array(
		$client->peerUser(
			user_id : -862334132572171886,
		),
		$client->peerChat(
			chat_id : 2220711096062412155,
		),
		$client->peerChannel(
			channel_id : -8297041581625833717,
		),
	),
	solution : 'mPh40UsTcIzwiud7',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 8,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 42,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 84,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 69,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 24,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 20,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 98,
			language : 'wJqhVI4Q07rupGlO',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 54,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : 8031788748448684169,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 58,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 88,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 96,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 6,
			document_id : -5785177516385802795,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 34,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 78,
			date : 80,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 37,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 79,
			old_text : 'Bc0VHLJh2IGzOEeP',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 26,
		),
	),
	solution_media : $client->messageMediaEmpty(),
);
```