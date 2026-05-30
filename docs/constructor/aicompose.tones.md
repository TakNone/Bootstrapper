# aicompose.tones

**Layer** : 225

```tl
aicompose.tones#6c9d0efe hash:long tones:Vector<AiComposeTone> users:Vector<User> = aicompose.Tones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |
| <mark>tones</mark> | [`Vector<AiComposeTone>`](type/AiComposeTone) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

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
			id : -9178102519239158250,
			access_hash : -7428636823237341635,
			slug : '9lTWE4brdxXny2Js',
			title : 'w8EFcv0o9j2MYyA4',
			emoji_id : -9019100442061679526,
			prompt : 'y2xd5iJu8CgcQozO',
			installs_count : 55,
			author_id : 7856574067942913742,
			example_english : $client->aiComposeToneExample(
				from : $client->textWithEntities(
					text : 'VKTGS9bvsk5FqdjE',
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
					text : 'zMyiFZ3qDJhGblN8',
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
			tone : 'Df5ABvPYr7n3UHsX',
			emoji_id : -5546501346514228605,
			title : 'BX1l8D9HvU6wfE3N',
		),
	),
	users : array(
		$client->userEmpty(
			id : -6661369319667962959,
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
			id : 7410208968172350777,
			access_hash : 1734712397296907278,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 44,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nNfZpMKvyJlRsUx6',
					reason : 'lNFXU14evIgBkQPp',
					text : 'D917VOKFWyXhc63s',
				),
			),
			bot_inline_placeholder : '04uZvib1sCqy6aX7',
			lang_code : 'Oy6USfvDzPFBglTJ',
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
				max_id : 86,
			),
			color : $client->peerColor(
				color : 88,
				background_emoji_id : -2503021751685829205,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : -3880105293128719758,
			),
			bot_active_users : 34,
			bot_verification_icon : -8378093072551051547,
			send_paid_messages_stars : -8354211437206433282,
		),
	),
);
```