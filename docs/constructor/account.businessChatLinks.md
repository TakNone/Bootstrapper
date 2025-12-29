# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 218

```tl
account.businessChatLinks#ec43a2d1 links:Vector<BusinessChatLink> chats:Vector<Chat> users:Vector<User> = account.BusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>links</mark> | [`Vector<BusinessChatLink>`](type/BusinessChatLink) | Links |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[account.BusinessChatLinks](type/account.BusinessChatLinks)

---

## Example

```php
$accountBusinessChatLinks = $client->account->businessChatLinks(
	links : array(
		$client->businessChatLink(
			link : 'vBuClkfIiJPEVeU7',
			message : 'AN4lEuxHBgISfpFC',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 49,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 37,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 63,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 84,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 55,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 32,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 42,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 61,
					language : '1pzkArQe3fWwB5Vn',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 64,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 75,
					user_id : -5604915677965637214,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 89,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 57,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 92,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 15,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 16,
					document_id : 5231969684631966063,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 79,
				),
			),
			title : 'VaMtk8J17Nxr6vjX',
			views : 7,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 9017985276528968588,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -46847911705011895,
			title : 'wt1pxBD2rslKjguF',
			photo : $client->chatPhotoEmpty(),
			participants_count : 89,
			date : 0,
			version : 80,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 25,
			),
		),
		$client->chatForbidden(
			id : -4479193763519143042,
			title : 'xdBlM1fyQSGusD4A',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -3340358722958541256,
			access_hash : 3873300404472266929,
			title : 'YIWHpXF81JACKfzt',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XcJnRFVHxKwvImEW',
					reason : 'HrA1s2lMT9IiwC3G',
					text : 'H8wPLNSIWhMxgjB1',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 46,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 5,
			),
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 99,
			),
			color : $client->peerColor(
				color : 76,
				background_emoji_id : 3207189824234599729,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : -3239844385803814705,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 25,
			subscription_until_date : 44,
			bot_verification_icon : 1001417090087448624,
			send_paid_messages_stars : 591132393661972225,
			linked_monoforum_id : -1212644923314216945,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4794859637665499109,
			access_hash : 7217788744656106213,
			title : '4QusapFX7dbN1Jre',
			until_date : 85,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4540212530303565156,
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
			id : -7743750126346449536,
			access_hash : 7435268049218324037,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qD8tT1nMNir0JRaz',
					reason : 'uBcFIhdWXjk40txf',
					text : 'Wu1wZ4VbhEDTKNHA',
				),
			),
			bot_inline_placeholder : '5bCGmVt6pUI8oxnh',
			lang_code : 'cYGztaCERSAQOqpb',
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
				max_id : 41,
			),
			color : $client->peerColor(
				color : 53,
				background_emoji_id : -3849620205757247930,
			),
			profile_color : $client->peerColor(
				color : 98,
				background_emoji_id : 6457128980155131373,
			),
			bot_active_users : 59,
			bot_verification_icon : 378125885037976735,
			send_paid_messages_stars : -3999294495700239942,
		),
	),
);
```