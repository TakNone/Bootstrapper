# poll

**Description** : *Poll*

**Layer** : 229

```tl
poll#966e2dbf id:long flags:# closed:flags.0?true public_voters:flags.1?true multiple_choice:flags.2?true quiz:flags.3?true open_answers:flags.6?true revoting_disabled:flags.7?true shuffle_answers:flags.8?true hide_results_until_close:flags.9?true creator:flags.10?true subscribers_only:flags.11?true question:TextWithEntities answers:Vector<PollAnswer> close_period:flags.4?int close_date:flags.5?int countries_iso2:flags.12?Vector<string> hash:long = Poll;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | ID of the poll |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **closed** | [`flags.0?true`](type/true) | Whether the poll is closed and doesn't accept any more answers |
| **public_voters** | [`flags.1?true`](type/true) | Whether cast votes are publicly visible to all users (non-anonymous poll) |
| **multiple_choice** | [`flags.2?true`](type/true) | Whether multiple options can be chosen as answer |
| **quiz** | [`flags.3?true`](type/true) | Whether this is a quiz (with wrong and correct answers, results shown in the return type). When creating a poll, the correct answers are specified in inputMediaPoll.correct_answers |
| **open_answers** | [`flags.6?true`](type/true) | Whether users can add new answer options after the poll is created, see open-answer polls » |
| **revoting_disabled** | [`flags.7?true`](type/true) | If set, users cannot change their vote after casting it |
| **shuffle_answers** | [`flags.8?true`](type/true) | Whether answer options are displayed in a randomized order to each user |
| **hide_results_until_close** | [`flags.9?true`](type/true) | Whether vote results are hidden from all participants until the poll is closed |
| **creator** | [`flags.10?true`](type/true) | Whether the current user created this poll |
| **subscribers_only** | [`flags.11?true`](type/true) | Whether only subscribers can vote: a user may vote only if they are currently a member of the channel/supergroup and joined it at least 24 hours before the poll was posted, see subscriber-only polls » |
| <mark>question</mark> | [`TextWithEntities`](type/TextWithEntities) | The question of the poll (only Premium users can use custom emoji entities here) |
| <mark>answers</mark> | [`Vector<PollAnswer>`](type/PollAnswer) | The possible answers (2-poll_answers_max), vote using messages.sendVote |
| **close_period** | [`flags.4?int`](type/int) | Amount of time in seconds the poll will be active after creation, up to poll_close_period_max » seconds. Can't be used together with close_date |
| **close_date** | [`flags.5?int`](type/int) | Point in time (Unix timestamp) when the poll will be automatically closed. Up to poll_close_period_max » seconds in the future; can't be used together with close_period |
| **countries_iso2** | [`flags.12?Vector<string>`](type/string) | If set, only users from the specified ISO 3166-1 alpha-2 country codes may vote, see country-restricted polls »; a user may vote only if the phone_country_iso2 » configuration parameter is contained in this list |
| <mark>hash</mark> | [`long`](type/long) | Hash for use with messages.getPollResults |

---

## Type

[Poll](type/Poll)

---

## Example

```php
$poll = $client->poll(
	id : -698229035047776781,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	open_answers : true,
	revoting_disabled : true,
	shuffle_answers : true,
	hide_results_until_close : true,
	creator : true,
	subscribers_only : true,
	question : $client->textWithEntities(
		text : 'U98FISXowHJnZtrb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 82,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 96,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 12,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 75,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 78,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 62,
				language : 'VJ593w64MHFfIKQm',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 41,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : -3353072453484644411,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 62,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 17,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 9,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 61,
				document_id : -4421430091196853017,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 22,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 54,
				date : 63,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 83,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 95,
				old_text : 'aVHAvGgokfSt4dqY',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 86,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'oW9e7crldV1yZK3S',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 94,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 66,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 100,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 13,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 79,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 11,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 25,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 21,
						language : 'O4kbCXr36tofsgSz',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 30,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : 8650030014647799584,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 47,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 41,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 79,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 26,
						document_id : 6388759181893176569,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 47,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 44,
						date : 45,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 83,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 81,
						old_text : 'ivTkMbUZCGRQDxPa',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 63,
					),
				),
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			media : $client->messageMediaEmpty(),
			added_by : $client->peerUser(
				user_id : -3237850219775939998,
			),
			date : 6,
		),
		$client->inputPollAnswer(
			text : $client->textWithEntities(
				text : 'gWp0a8klqyHIfo32',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 98,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 76,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 87,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 86,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 77,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 87,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 8,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 93,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 71,
						language : '9pYFleroEidULPXg',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 4,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 34,
						user_id : -8284094296825680763,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 40,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 66,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 99,
						document_id : 7547637640264374786,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 93,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 42,
						date : 43,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 64,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 78,
						old_text : 'MUZPDeBRFxVkmfpo',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 90,
					),
				),
			),
			media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
		),
	),
	close_period : 7,
	close_date : 22,
	countries_iso2 : array('VtFqy2uHrwxZYC7B'),
	hash : 0,
);
```