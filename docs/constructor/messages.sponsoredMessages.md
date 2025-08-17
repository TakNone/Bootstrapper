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
	posts_between : 15,
	start_delay : 27,
	between_delay : 85,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : '??|nwLiveProto???kd',
			url : 'https://docs.liveproto.dev',
			title : 'GSws9YDkCAvXj3i0',
			message : 'pOX7j5vZ8SR2UDJs',
			entities : array(
				$client->messageEntityUnknown(
					offset : 49,
					length : 98,
				),
				$client->messageEntityMention(
					offset : 58,
					length : 82,
				),
				$client->messageEntityHashtag(
					offset : 47,
					length : 5,
				),
				$client->messageEntityBotCommand(
					offset : 96,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 66,
					length : 68,
				),
				$client->messageEntityEmail(
					offset : 39,
					length : 31,
				),
				$client->messageEntityBold(
					offset : 38,
					length : 25,
				),
				$client->messageEntityItalic(
					offset : 86,
					length : 90,
				),
				$client->messageEntityCode(
					offset : 74,
					length : 68,
				),
				$client->messageEntityPre(
					offset : 12,
					length : 51,
					language : 'ZQWSgybKTaO06J9f',
				),
				$client->messageEntityTextUrl(
					offset : 43,
					length : 86,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 87,
					length : 55,
					user_id : 4102398161402876673,
				),
				$client->inputMessageEntityMentionName(
					offset : 9,
					length : 3,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 62,
					length : 18,
				),
				$client->messageEntityCashtag(
					offset : 13,
					length : 0,
				),
				$client->messageEntityUnderline(
					offset : 88,
					length : 57,
				),
				$client->messageEntityStrike(
					offset : 42,
					length : 3,
				),
				$client->messageEntityBankCard(
					offset : 30,
					length : 49,
				),
				$client->messageEntitySpoiler(
					offset : 80,
					length : 12,
				),
				$client->messageEntityCustomEmoji(
					offset : 39,
					length : 76,
					document_id : -8453016040699970206,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 30,
					length : 79,
				),
			),
			photo : $client->photoEmpty(
				id : -8056030043758352372,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : -6422223176110338056,
			),
			button_text : 'obK1TtMGfhPzUH7F',
			sponsor_info : 'Mp4kuRcsmtF9iUjf',
			additional_info : 'fvoLtu4lJqF7ED1z',
			min_display_duration : 20,
			max_display_duration : 35,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8130593274361063175,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7638414116738310118,
			title : 'bnIxqykCd6cV1SY2',
			photo : $client->chatPhotoEmpty(),
			participants_count : 89,
			date : 32,
			version : 95,
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
				until_date : 10,
			),
		),
		$client->chatForbidden(
			id : 2629887290399495004,
			title : 'NclUv5qr0J46EGpB',
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
			id : 3202682153458973252,
			access_hash : -6384466905483572286,
			title : '0mJDx9yak7AZEzjF',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YiVZasrg6LmhMyQp',
					reason : '0LNSe2m9CDgPtRYV',
					text : 'RY48VzrndkSZGeax',
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
				until_date : 43,
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
				until_date : 61,
			),
			participants_count : 18,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 87,
			color : $client->peerColor(
				color : 42,
				background_emoji_id : 7979847246986413053,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : 2100923969735607599,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 74,
			subscription_until_date : 58,
			bot_verification_icon : -4283250921070318668,
			send_paid_messages_stars : 3304834996514143192,
			linked_monoforum_id : -6740235475718077817,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 333533564878464126,
			access_hash : -5136344085981360515,
			title : 'wSlsC8ku1Ur7WZoc',
			until_date : 90,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6236543971942670180,
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
			id : -3007597449640866507,
			access_hash : -5061656548438597766,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pKQY32VchftP7Rqk',
					reason : 'uOBkTR4w38IjH6YU',
					text : 'FD1q3Bsv75rGTxm4',
				),
			),
			bot_inline_placeholder : 'cNE039yZgqUJoaek',
			lang_code : 'ZK3MbeBG76F9QYrS',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 20,
			color : $client->peerColor(
				color : 38,
				background_emoji_id : -4129760392212037094,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : -5635513770317229406,
			),
			bot_active_users : 6,
			bot_verification_icon : -756132508911115998,
			send_paid_messages_stars : 2314600872558244053,
		),
	),
);
```