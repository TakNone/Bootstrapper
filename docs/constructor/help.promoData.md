# help.promoData

**Description** : *A set of useful suggestions and a PSA/MTProxy sponsored peer, see here &raquo; for more info*

**Layer** : 222

```tl
help.promoData#8a4d87a flags:# proxy:flags.0?true expires:int peer:flags.3?Peer psa_type:flags.1?string psa_message:flags.2?string pending_suggestions:Vector<string> dismissed_suggestions:Vector<string> custom_pending_suggestion:flags.4?PendingSuggestion chats:Vector<Chat> users:Vector<User> = help.PromoData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **proxy** | [`flags.0?true`](type/true) | Set when connecting using an MTProxy that has configured an associated peer (that will be passed in peer, i.e. the channel that sponsored the MTProxy) that should be pinned on top of the chat list |
| <mark>expires</mark> | [`int`](type/int) | Unixtime when to re-invoke help.getPromoData |
| **peer** | [`flags.3?Peer`](type/Peer) | MTProxy/PSA peer |
| **psa_type** | [`flags.1?string`](type/string) | For Public Service Announcement peers, indicates the type of the PSA |
| **psa_message** | [`flags.2?string`](type/string) | For Public Service Announcement peers, contains the PSA itself |
| <mark>pending_suggestions</mark> | [`Vector<string>`](type/string) | Contains a list of pending suggestions » |
| <mark>dismissed_suggestions</mark> | [`Vector<string>`](type/string) | Contains a list of inverted suggestions » |
| **custom_pending_suggestion** | [`flags.4?PendingSuggestion`](type/PendingSuggestion) | Contains a list of custom pending suggestions » |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chat info |
| <mark>users</mark> | [`Vector<User>`](type/User) | User info |

---

## Type

[help.PromoData](type/help.PromoData)

---

## Example

```php
$helpPromoData = $client->help->promoData(
	proxy : true,
	expires : 88,
	peer : $client->peerUser(
		user_id : 2200630865678693775,
	),
	psa_type : 'CXoNRO4w59veMJr8',
	psa_message : '1UEOqCJw4RZbkm96',
	pending_suggestions : array('f4tGqUKOBivn3CP6'),
	dismissed_suggestions : array('RuTKesCH1qESoPnd'),
	custom_pending_suggestion : $client->pendingSuggestion(
		suggestion : '19jpEOb5x8midfHS',
		title : $client->textWithEntities(
			text : '4yVw0eYz9ZKL58uR',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 37,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 84,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 69,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 59,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 59,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 79,
					language : 'qlxGhnQT3tbk5Cr8',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 42,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : 4529167945620091318,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 81,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 1,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 32,
					document_id : -4043124001024116173,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 30,
				),
			),
		),
		description : $client->textWithEntities(
			text : 'k3VXwraJsA6ycxEm',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 4,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 23,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 100,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 54,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 23,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 85,
					language : 'tkYMT1xU9nlqy6sX',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 12,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : 5239983705133761772,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 12,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 10,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 97,
					document_id : -2453575700592196144,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 89,
				),
			),
		),
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : 7120388990508602332,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8468336343466326900,
			title : 'cYOPQThGUFRXlKNS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 65,
			date : 42,
			version : 14,
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
				until_date : 26,
			),
		),
		$client->chatForbidden(
			id : 6240137934665056668,
			title : 'SLQIkXPNto3p9xU2',
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
			id : -8783890188240914170,
			access_hash : 75581101462954000,
			title : 'T3L0xKFnyjsiJtvX',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 10,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IOspDoN19fkartud',
					reason : 'Z4AD5gF2OsaixUnd',
					text : 'Xh16gdLm4nuZa9Q5',
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
				until_date : 87,
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
				until_date : 13,
			),
			participants_count : 30,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 10,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : 2607633657648110591,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : -7850529488122278595,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 90,
			subscription_until_date : 28,
			bot_verification_icon : -8259707177007112834,
			send_paid_messages_stars : 4484300513579344308,
			linked_monoforum_id : -7934062206880288386,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 6659999154426373061,
			access_hash : -2081876474144408026,
			title : 'FW0Dpq6aCjALoIkc',
			until_date : 2,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3447346547367996646,
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
			id : -3475427198993630035,
			access_hash : -6747482942944946687,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5IE9uLnJp2e8AqtO',
					reason : 'Ry25f8b91FX7qjwN',
					text : 'qGs7dyt8Kn1Rge5m',
				),
			),
			bot_inline_placeholder : 'uH8ATcaPzSyrMOvp',
			lang_code : '4DX6nGtQamo0BLpF',
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
				max_id : 58,
			),
			color : $client->peerColor(
				color : 51,
				background_emoji_id : -1192551040729010993,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : -9072879112144910052,
			),
			bot_active_users : 74,
			bot_verification_icon : 1020020425163351210,
			send_paid_messages_stars : -2304307221459770658,
		),
	),
);
```