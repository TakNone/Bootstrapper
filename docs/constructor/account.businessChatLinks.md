# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 216

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
			link : 'DWbuiFv3lkT8L5hA',
			message : 'proO2X9fI4vqcJCT',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 22,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 65,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 52,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 94,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 8,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 94,
					language : 'ZLSsX86r0uNkeq7G',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 70,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 65,
					user_id : 4613238609959017918,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 70,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 20,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 26,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 82,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 40,
					document_id : 1809674515043520877,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 45,
				),
			),
			title : 'eIgo4LpiYh3xKC7f',
			views : 66,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1895030756628736804,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5297172724185632750,
			title : '3I4Gd5a9SmtjhOVu',
			photo : $client->chatPhotoEmpty(),
			participants_count : 82,
			date : 54,
			version : 68,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 23,
			),
		),
		$client->chatForbidden(
			id : -6994365244305796880,
			title : 'KiZYycuad0RrxFTg',
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
			id : -8853980603979352736,
			access_hash : 4882245108628222677,
			title : 'IOEdUfV9QH25XgjL',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'AQnPjTDsiFh5mveM',
					reason : 'Catdzo8SPbkhOUF0',
					text : 'MPtcEw2uCmLbr9lQ',
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
				until_date : 67,
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
				until_date : 59,
			),
			participants_count : 100,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 6,
			color : $client->peerColor(
				color : 98,
				background_emoji_id : 5757335896612764534,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : 886299135466355239,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 97,
			subscription_until_date : 89,
			bot_verification_icon : -4414775907291860365,
			send_paid_messages_stars : -3237475277700218164,
			linked_monoforum_id : -5771678842166648146,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8194560661537719915,
			access_hash : 7938527638164433805,
			title : 'EkhfZ03dBx6JU2TA',
			until_date : 63,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3489316720547616528,
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
			id : 2805952412259512828,
			access_hash : -7700444180217303821,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YktCBjmgdbrGL6QD',
					reason : 'RdjiZtq3N0Q4JW1C',
					text : 'm1MTaHxUq5fog69r',
				),
			),
			bot_inline_placeholder : 'DjfbuPdwLx43l0yI',
			lang_code : 'elW6tJzFQOyAbVo3',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 45,
			color : $client->peerColor(
				color : 72,
				background_emoji_id : 1232695953906480351,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 4715890491853309894,
			),
			bot_active_users : 45,
			bot_verification_icon : 1091207903133702296,
			send_paid_messages_stars : -1457509745299999912,
		),
	),
);
```