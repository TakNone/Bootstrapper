# chatlists.chatlistInvite

**Description** : *Info about a chat folder deep link &raquo;*

**Layer** : 218

```tl
chatlists.chatlistInvite#f10ece2f flags:# title_noanimate:flags.1?true title:TextWithEntities emoticon:flags.0?string peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **title_noanimate** | [`flags.1?true`](type/true) | If set, any animated emojis present in title should not be animated and should be instead frozen on the first frame |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Name of the link |
| **emoticon** | [`flags.0?string`](type/string) | Emoji to use as icon for the folder |
| <mark>peers</mark> | [`Vector<Peer>`](type/Peer) | Supergroups and channels to join |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInvite(
	title_noanimate : true,
	title : $client->textWithEntities(
		text : 'PQ5azmRuf2ow397N',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 23,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 58,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 12,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 12,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 83,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 60,
				language : '1loSvifk9F6zjnIb',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 98,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 54,
				user_id : -7466227659977005909,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 64,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 62,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 20,
				document_id : 4109369242269261097,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 37,
			),
		),
	),
	emoticon : 'pY5OrA1QjN0KH2oC',
	peers : array(
		$client->peerUser(
			user_id : -459934574038759978,
		),
		$client->peerChat(
			chat_id : 4487786163466348394,
		),
		$client->peerChannel(
			channel_id : -8057978702950174169,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3689201796648983798,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2444017134146331318,
			title : 'XvimeowjOnTuaZxJ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 88,
			date : 94,
			version : 39,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 73,
			),
		),
		$client->chatForbidden(
			id : -2118817838063466007,
			title : 's1hktbKImj5f6lC8',
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
			id : 1133208109487549581,
			access_hash : 1021574230805054394,
			title : 'b9YuxhHcQPImiCgJ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0OkJ7SL6oWHsKaVI',
					reason : '4BELlNHz1CpfdWgr',
					text : 'xGPoF7JYhntp5ckr',
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
				until_date : 65,
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
			participants_count : 2,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 51,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : -4916857758015684453,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : 298681256886614953,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 15,
			subscription_until_date : 45,
			bot_verification_icon : 846526462967929969,
			send_paid_messages_stars : -2276956435752180995,
			linked_monoforum_id : 8210765367823034227,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4015017987229384539,
			access_hash : -1106517939866950208,
			title : 'tA8mDPNqHKkJhvbL',
			until_date : 3,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4779748886907447864,
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
			id : 415461964321622488,
			access_hash : -4227478314402660942,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 27,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qSmdYFB8IHbAoU6p',
					reason : 'HwaXf7u8MvLPDUFb',
					text : 'KbnzduxWetRqM2jH',
				),
			),
			bot_inline_placeholder : 'oGAPtDnJrYsS7cy8',
			lang_code : '8Mb3RnYGkdLtA26u',
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
				max_id : 99,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : 4693185599631840353,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : -1852565804171242856,
			),
			bot_active_users : 60,
			bot_verification_icon : -2395745236409226671,
			send_paid_messages_stars : 1771240944811976018,
		),
	),
);
```