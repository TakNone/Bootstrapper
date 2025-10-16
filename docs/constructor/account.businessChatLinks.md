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
			link : '4KMVLIB32FfjQYcz',
			message : 'D6AdhqElNK7mPbt1',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 49,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 62,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 21,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 38,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 69,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 68,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 0,
					language : '26ZHBEzi4NGO7Jv1',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 85,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 27,
					user_id : -130202226055903349,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 15,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 9,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 76,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 33,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 79,
					document_id : 2512733668877455887,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 92,
				),
			),
			title : '7CgYRctBPdKHFmoQ',
			views : 60,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 505434682374340332,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5768124572572547364,
			title : 'aOxEN04rC7GbztTf',
			photo : $client->chatPhotoEmpty(),
			participants_count : 42,
			date : 71,
			version : 16,
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
				until_date : 74,
			),
		),
		$client->chatForbidden(
			id : 7053299312448136955,
			title : 'rB8TN2PkqJiLzld7',
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
			id : -5835407967124024339,
			access_hash : -939845258808612881,
			title : 'ZajrCY3hdM2KtmF4',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wtOXgT8H06rPBu27',
					reason : '6Jh701QHg3srflY8',
					text : 'eOSNJ4FRZfmTkpXu',
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
				until_date : 100,
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
				until_date : 40,
			),
			participants_count : 48,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 39,
			color : $client->peerColor(
				color : 63,
				background_emoji_id : -4418051295815138723,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : -363056419213537653,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 90,
			subscription_until_date : 100,
			bot_verification_icon : -4990877532590276856,
			send_paid_messages_stars : -5556541572886757350,
			linked_monoforum_id : -738187779176612020,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4124874309798978433,
			access_hash : 217510837996956786,
			title : 'G6M3fhUSQe2R94Hn',
			until_date : 85,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4539823992796263835,
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
			id : -3670057457830502170,
			access_hash : 4559358991962092512,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 79,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qKe3785PhViEzfUB',
					reason : 'Qvh72xgTlnC9A1Ed',
					text : '3LHIDjOZCMzQu4o9',
				),
			),
			bot_inline_placeholder : 'ONEDUAscnXu9aJR7',
			lang_code : 'DH39sobU1Ywl6KpO',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -8590080064396990342,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 121711750506611270,
			),
			bot_active_users : 8,
			bot_verification_icon : 4893910541644622822,
			send_paid_messages_stars : 1459854236213002484,
		),
	),
);
```