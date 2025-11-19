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
			link : 'Joht8SCxKjPpnqz4',
			message : 'FUgEYfGjJWPIcNp5',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 81,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 40,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 8,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 72,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 57,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 92,
					language : 'P8wFvdRnLXV3OM9D',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 33,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 0,
					user_id : -6045581340992528609,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 42,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 32,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 61,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 93,
					document_id : -2525546317979993933,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 12,
				),
			),
			title : 'rMU5uyOnaYqJjVcb',
			views : 48,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8622561518755256229,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -486013638109377301,
			title : 'l2PXOpoanidmMZ0q',
			photo : $client->chatPhotoEmpty(),
			participants_count : 25,
			date : 53,
			version : 18,
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
				until_date : 69,
			),
		),
		$client->chatForbidden(
			id : 661376986044737199,
			title : 'XgpDByY1GEcHq4Z5',
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
			id : -8457624676638775020,
			access_hash : 7416242800393164892,
			title : 'iIV9NxceySLG2BjF',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '60fKVI7FyATcSqZU',
					reason : '2r3s6npJEGU9wy04',
					text : 'i9Muk3vUK5HSWE1Z',
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
				until_date : 85,
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
				until_date : 83,
			),
			participants_count : 85,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 2,
			),
			color : $client->peerColor(
				color : 11,
				background_emoji_id : -7920488175268033090,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : -7841063397411071960,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 18,
			subscription_until_date : 33,
			bot_verification_icon : -6670694288134559166,
			send_paid_messages_stars : -4504590425938123246,
			linked_monoforum_id : -2974736234006906343,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1959679272907730664,
			access_hash : 4528747636159876122,
			title : 'Kdg1UQlLYxPkEDem',
			until_date : 49,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2497741161598659146,
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
			id : 8055170005350617523,
			access_hash : -1185364778091986740,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kKLSFOPf3RdgiG9I',
					reason : 'XTgpioF69ublRZxV',
					text : 'wFVWmKseU9aDOGcM',
				),
			),
			bot_inline_placeholder : 'YZ9tHeCxUyGl3ns8',
			lang_code : 'c6hBPeD4WRFrtaoZ',
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
				max_id : 54,
			),
			color : $client->peerColor(
				color : 2,
				background_emoji_id : 4710054393738725287,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : -4015961255693128355,
			),
			bot_active_users : 37,
			bot_verification_icon : 4872778061477017090,
			send_paid_messages_stars : -7605252756738707565,
		),
	),
);
```