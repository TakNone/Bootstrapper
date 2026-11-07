# poll

**Description** : *Poll*

**Layer** : 233

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
	id : -8109581466021831730,
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
		text : '21HRvcfYoDt6WOek',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 6,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 16,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 99,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 32,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 25,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 20,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 99,
				language : 'Id8nsb4UPaKpjzS7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 96,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : 8161188035797649239,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 18,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 87,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 93,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 20,
				document_id : -2819518204286493258,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 64,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 17,
				date : 7,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 31,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 82,
				old_text : 'tvX3Bal2COfJsgU8',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 58,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 30,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'qkOXEVsWmpDcg4K1',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 25,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 17,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 94,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 81,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 12,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 52,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 93,
						language : 'PE9RbzeGu8Jsrt7a',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 74,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 75,
						user_id : -7587012704082898633,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 60,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 100,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 78,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 34,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 75,
						document_id : 8121368270425677466,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 31,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 25,
						date : 49,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 85,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 67,
						old_text : 'm1aL4DXip936q5MR',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 57,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 0,
					),
				),
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			media : $client->messageMediaEmpty(),
			added_by : $client->peerUser(
				user_id : 7559243250656310968,
			),
			date : 56,
		),
		$client->inputPollAnswer(
			text : $client->textWithEntities(
				text : 'aSw3MXFLgYzjxIGJ',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 34,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 83,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 76,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 96,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 37,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 96,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 36,
						language : 'zHOmjPKBJE6b59e2',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 91,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 16,
						user_id : -7086743377497266371,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 79,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 85,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 27,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 21,
						document_id : 8139089853106128002,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 95,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 74,
						date : 13,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 25,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 14,
						old_text : 'NYF7JuxebQ8gMCiI',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 92,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 65,
					),
				),
			),
			media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
		),
	),
	close_period : 34,
	close_date : 43,
	countries_iso2 : array('4qQhFAcjnvsYbNJz'),
	hash : 0,
);
```