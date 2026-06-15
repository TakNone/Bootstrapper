# aicompose.tones

**Layer** : 227

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
			id : 2819428197757859304,
			access_hash : 4670017916887886909,
			slug : 'jr70Iv6of9Y1yiQ5',
			title : 'zNGOxVjJDobRwdEK',
			emoji_id : -3405667157636584656,
			prompt : 'ZEqu98xLPOU6ts4a',
			installs_count : 62,
			author_id : -311479913574654364,
			example_english : $client->aiComposeToneExample(
				from : $client->textWithEntities(
					text : 'XH1aLoxWrVEnAhU0',
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
					text : 'RCrP2oD31S0U8upV',
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
			tone : 'sSWRrfNM9cpYFi3V',
			emoji_id : -3279471349934721244,
			title : 'Lj8TcvpZPYG590JR',
		),
	),
	users : array(
		$client->userEmpty(
			id : 2113176847147248107,
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
			id : 6387437860249848460,
			access_hash : 8223974286153421744,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pT25SAaXbJWwEBR8',
					reason : 'RD0ZKifEYFgole9q',
					text : '1BvDHzUdG5at2MbY',
				),
			),
			bot_inline_placeholder : 'czOPFjmiYsohwEaU',
			lang_code : 'ViLcfb0o3J5IrDE9',
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
				max_id : 63,
			),
			color : $client->peerColor(
				color : 7,
				background_emoji_id : 1584454109527291770,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -4986212700248478149,
			),
			bot_active_users : 20,
			bot_verification_icon : 2114669876635409234,
			send_paid_messages_stars : -3277706001566738989,
		),
	),
);
```