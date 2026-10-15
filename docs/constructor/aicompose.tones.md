# aicompose.tones

**Description** : *The list of saved AI composer tones &raquo; of the current user*

**Layer** : 229

```tl
aicompose.tones#6c9d0efe hash:long tones:Vector<AiComposeTone> users:Vector<User> = aicompose.Tones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash for pagination, for more info click here |
| <mark>tones</mark> | [`Vector<AiComposeTone>`](type/AiComposeTone) | The saved AI composer tones |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users (i.e. the authors of the tones) |

---

## Type

[aicompose.Tones](type/aicompose.Tones)

---

## Example

```php
$aicomposeTones = $client->aicompose->tones(
	hash : 0,
	tones : array(
		$client->aiComposeTone(
			creator : true,
			id : -4312141624357244373,
			access_hash : -3068379329750611914,
			slug : 'LJqMQpH3VsBYhmCG',
			title : 'xgjD5bcvUiGpVzXq',
			emoji_id : -4795788749922146023,
			prompt : 'haZkJwegC30P5Fvi',
			installs_count : 65,
			author_id : -1821046467922258605,
			example_english : $client->aiComposeToneExample(
				from : $client->textWithEntities(
					text : 'h0slxctNroM87TwE',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				to : $client->textWithEntities(
					text : 'i2IsSy78bTA6upFd',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
			),
		),
		$client->aiComposeToneDefault(
			tone : 'hmOG8vIpflEgMXwn',
			emoji_id : -7369446490241021245,
			title : 'PFY2HpkT5WA6fgGl',
		),
	),
	users : array(
		$client->userEmpty(
			id : -7296081267364373895,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 1192311868588664658,
			access_hash : 4390777679529498791,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Hwtcx67pbamVLQUP',
					reason : 'R6VvWSrzb9G0tpoO',
					text : 'slqnBOWaHJxNUK4F',
				),
			),
			bot_inline_placeholder : '6WKi2L1Bokx9cvCr',
			lang_code : '8q7Y2FuIk6hWgOZp',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 61,
			),
			color : $client->peerColor(
				color : 65,
				background_emoji_id : 165603642170864275,
			),
			profile_color : $client->peerColor(
				color : 48,
				background_emoji_id : 2677897241153172940,
			),
			bot_active_users : 37,
			bot_verification_icon : 9201573159134800863,
			send_paid_messages_stars : -4692416281718767935,
			linked_community_id : -2122484855886708433,
		),
	),
);
```