# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 211

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
	posts_between : 81,
	start_delay : 91,
	between_delay : 2,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : 'V??mLiveProto@??"',
			url : 'https://docs.liveproto.dev',
			title : 'ZE2Vl0bgszQ4NUFi',
			message : 'RYaFo6AmuONJ4dvb',
			entities : array(
				$client->messageEntityUnknown(
					offset : 40,
					length : 93,
				),
				$client->messageEntityMention(
					offset : 4,
					length : 90,
				),
				$client->messageEntityHashtag(
					offset : 93,
					length : 38,
				),
				$client->messageEntityBotCommand(
					offset : 13,
					length : 93,
				),
				$client->messageEntityUrl(
					offset : 6,
					length : 35,
				),
				$client->messageEntityEmail(
					offset : 34,
					length : 54,
				),
				$client->messageEntityBold(
					offset : 9,
					length : 40,
				),
				$client->messageEntityItalic(
					offset : 72,
					length : 69,
				),
				$client->messageEntityCode(
					offset : 40,
					length : 19,
				),
				$client->messageEntityPre(
					offset : 84,
					length : 5,
					language : 'ytkCMw1SA6jec9OD',
				),
				$client->messageEntityTextUrl(
					offset : 86,
					length : 0,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 47,
					length : 71,
					user_id : -6356437791150173989,
				),
				$client->inputMessageEntityMentionName(
					offset : 89,
					length : 13,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 14,
					length : 1,
				),
				$client->messageEntityCashtag(
					offset : 16,
					length : 57,
				),
				$client->messageEntityUnderline(
					offset : 50,
					length : 2,
				),
				$client->messageEntityStrike(
					offset : 38,
					length : 79,
				),
				$client->messageEntityBankCard(
					offset : 7,
					length : 48,
				),
				$client->messageEntitySpoiler(
					offset : 77,
					length : 26,
				),
				$client->messageEntityCustomEmoji(
					offset : 54,
					length : 81,
					document_id : -1053855641193833641,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 31,
					length : 62,
				),
			),
			photo : $client->photoEmpty(
				id : -2562033475822651221,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : -4453793902729865913,
			),
			button_text : '6czi1qwpGgJEdf9B',
			sponsor_info : '2Im4opwQTBNReX9v',
			additional_info : 'mH657X1QOr2FwMpc',
			min_display_duration : 10,
			max_display_duration : 81,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6066350776984036597,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6684670931403455510,
			title : 'hNstK59vx1ZGQqB4',
			photo : $client->chatPhotoEmpty(),
			participants_count : 47,
			date : 52,
			version : 89,
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
				until_date : 78,
			),
		),
		$client->chatForbidden(
			id : 9170908776869810020,
			title : '9UxnEt2Kem8AFYfN',
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
			id : 7163090055869202634,
			access_hash : -9183321667411016109,
			title : 'rsmI8UgejGAO6onb',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6tXsYWlcjdkeya8w',
					reason : 'fMUcVWY2S6XAmCJR',
					text : 'ozrhHKx91yF5wRqU',
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
				until_date : 0,
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
				until_date : 88,
			),
			participants_count : 52,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 2,
			color : $client->peerColor(
				color : 84,
				background_emoji_id : -4444828937059941442,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : -6884118136468256105,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 50,
			subscription_until_date : 61,
			bot_verification_icon : 3554673882636169541,
			send_paid_messages_stars : 2939620233262052630,
			linked_monoforum_id : -1313856733324686301,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7169710289782936614,
			access_hash : -184604829017832196,
			title : '1TWCPobhKiv8jagn',
			until_date : 45,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6639133686582052563,
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
			id : -9208413016076304195,
			access_hash : -7864341758584549133,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mqLDsS6dKIno0GQ1',
					reason : 'GMhuL8ZWpwe1AIBc',
					text : 'LcuwZoBkDQVx9MgS',
				),
			),
			bot_inline_placeholder : 'pUyl2LngWY03Ft5m',
			lang_code : 'PDtc6KRLFXiAvf10',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 5,
			color : $client->peerColor(
				color : 66,
				background_emoji_id : 2635944148860011881,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : 9020478773359583508,
			),
			bot_active_users : 22,
			bot_verification_icon : -6187624871903320268,
			send_paid_messages_stars : 4809392512974960844,
		),
	),
);
```