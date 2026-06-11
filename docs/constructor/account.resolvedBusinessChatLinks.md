# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 227

```tl
account.resolvedBusinessChatLinks#9a23af21 flags:# peer:Peer message:string entities:flags.0?Vector<MessageEntity> chats:Vector<Chat> users:Vector<User> = account.ResolvedBusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | Destination peer |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[account.ResolvedBusinessChatLinks](type/account.ResolvedBusinessChatLinks)

---

## Example

```php
$accountResolvedBusinessChatLinks = $client->account->resolvedBusinessChatLinks(
	peer : $client->peerUser(
		user_id : 7361221137233626541,
	),
	message : '6fMEXtd5nl1HuUOV',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 54,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 25,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 91,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 45,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 13,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 97,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 92,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 20,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 16,
			language : 'F4cmhqEsKUwl98S1',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 23,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 54,
			user_id : 1912470406236366822,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 9,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 81,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 23,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 66,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 80,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 79,
			document_id : 2030250705678489184,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 65,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 9,
			date : 4,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 12,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 52,
			old_text : 'sNq6zRLhWQIk8Plb',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 32,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5948998756345342843,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7642171874599941199,
			title : 'wVngrlW7Qp8qTAaN',
			photo : $client->chatPhotoEmpty(),
			participants_count : 81,
			date : 13,
			version : 54,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 60,
			),
		),
		$client->chatForbidden(
			id : 2768905969604221050,
			title : 'nJGORgeb1qP9mzDt',
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
			id : 9199679381669863951,
			access_hash : -5185178431452385031,
			title : 'eJ1chWIZ8ODvLA49',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kUoabpEMJ36ZWsT0',
					reason : '3Fa9j5w1DPYkM7hg',
					text : 'imjcxqhDtwU6Abun',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 52,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 92,
			),
			participants_count : 98,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 18,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : -653774049989627372,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : 6913533149055881111,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 91,
			subscription_until_date : 70,
			bot_verification_icon : 154940059078690004,
			send_paid_messages_stars : -2321499932390945103,
			linked_monoforum_id : 8221108066685220260,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 1884693112323409371,
			access_hash : -1171702722489452899,
			title : '3iRnLev7pkhoMYyV',
			until_date : 9,
		),
	),
	users : array(
		$client->userEmpty(
			id : 587931331421432993,
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
			id : -8895769204794178349,
			access_hash : -5967828939387973366,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cTeCyvZFbk0IQzJh',
					reason : 'Iy4jgxG0NXpTsWSR',
					text : 'cq0G7HWTo5NLYSPr',
				),
			),
			bot_inline_placeholder : 'efpZgKWxqzJEImdn',
			lang_code : 'gTEub5AMlqIpWvdD',
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
				max_id : 95,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 5315567887690256458,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -6364549659220603047,
			),
			bot_active_users : 82,
			bot_verification_icon : -3783511467341843026,
			send_paid_messages_stars : -6499805869203601417,
		),
	),
);
```