# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 214

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **posts_between** | [`flags.0?int`](type/int) | If set, specifies the minimum number of messages between shown sponsored messages; otherwise, only one sponsored message must be shown after all ordinary messages |
| **start_delay** | [`flags.1?int`](type/int) | NOTHING |
| **between_delay** | [`flags.2?int`](type/int) | NOTHING |
| <mark>messages</mark> | [`Vector<SponsoredMessage>`](type/SponsoredMessage) | Sponsored messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the sponsored messages |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the sponsored messages |

---

## Type

[messages.SponsoredMessages](type/messages.SponsoredMessages)

---

## Example

```php
$messagesSponsoredMessages = $client->messages->sponsoredMessages(
	posts_between : 45,
	start_delay : 27,
	between_delay : 49,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'uwDpxh1q80sHKyYg',
			message : 'Y1372JHSCLBsXEbI',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 63,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 93,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 38,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 40,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 58,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 17,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 53,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 42,
					language : 'ilXpntK5ZgRA6TwC',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 13,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 11,
					user_id : -7349960661296579006,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 100,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 82,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 14,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 5,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 8,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 27,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 74,
					document_id : 247250781937419619,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 2,
				),
			),
			photo : $client->photoEmpty(
				id : 402366715150926158,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : -1570502874401438393,
			),
			button_text : 'B07kejwuivgNTdKQ',
			sponsor_info : 'FTBO3CJbwdscVnWP',
			additional_info : 'oTSAKNfuMLZWDxXb',
			min_display_duration : 21,
			max_display_duration : 67,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3821209967424816808,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3078012357613877910,
			title : 'pAktwJWjhBUHnI06',
			photo : $client->chatPhotoEmpty(),
			participants_count : 35,
			date : 84,
			version : 3,
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
				until_date : 45,
			),
		),
		$client->chatForbidden(
			id : -2171410688896845746,
			title : 'zDCKfLJgMmvS3hXy',
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
			id : -1154523835882210725,
			access_hash : -7225315259016779921,
			title : 'yPGg2npmNJ14xOw9',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ivVpGMqeXs3WSAQU',
					reason : 'Dyf8er6iaHCjGwvL',
					text : 'lSUoWvi6f4Qt8Rgn',
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
				until_date : 45,
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
				until_date : 55,
			),
			participants_count : 89,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 57,
			color : $client->peerColor(
				color : 62,
				background_emoji_id : 6426877726935319216,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : -6835954720913129321,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 94,
			subscription_until_date : 46,
			bot_verification_icon : 5782222789002489241,
			send_paid_messages_stars : -6368968314197404576,
			linked_monoforum_id : 3198876865939996236,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8458343380515275423,
			access_hash : 7173201924227668113,
			title : 'gyiYRrwhB3HDLQ7b',
			until_date : 55,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4553989027993870258,
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
			id : -595844157804164526,
			access_hash : -7145330823062270302,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 96,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'js2zpmSD8oICudER',
					reason : 'atylnDfJ9VMeSUrY',
					text : 'D5ynQexo9EfLCcNO',
				),
			),
			bot_inline_placeholder : 'GcDledyVAHgWJKQU',
			lang_code : 'A9DrXCnEKhMzQc3j',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 90,
			color : $client->peerColor(
				color : 3,
				background_emoji_id : -3246147118477214144,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -5441104914433212340,
			),
			bot_active_users : 73,
			bot_verification_icon : 1547521255782979175,
			send_paid_messages_stars : 9036330868683433021,
		),
	),
);
```