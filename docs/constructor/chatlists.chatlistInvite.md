# chatlists.chatlistInvite

**Description** : *Info about a chat folder deep link &raquo;*

**Layer** : 216

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
		text : '8wGV1FSIsRWuBLNC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 66,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 81,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 70,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 64,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 5,
				language : 'Tgd2iZ8GDnwsSylJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 36,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : 227551884892952106,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 47,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 41,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 44,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 59,
				document_id : -5108004358629153234,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 19,
			),
		),
	),
	emoticon : '2nIgAiTqGlcLuMHD',
	peers : array(
		$client->peerUser(
			user_id : -985320471105997548,
		),
		$client->peerChat(
			chat_id : 4078360206799969067,
		),
		$client->peerChannel(
			channel_id : 2135291707134194064,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8851717056113256724,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8857352547079688295,
			title : 'EpHJxXORPuI7MkBV',
			photo : $client->chatPhotoEmpty(),
			participants_count : 36,
			date : 22,
			version : 12,
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
				until_date : 87,
			),
		),
		$client->chatForbidden(
			id : 7131284161267301414,
			title : 'a0SLtZbOnvAzesgw',
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
			id : 1617586895475213847,
			access_hash : -6214235881364196993,
			title : 'Che4LE86opTFgGf3',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'p9GykWqfN2Ka7MBt',
					reason : 'lUKvfPRMGpVN34rh',
					text : 'mV6TbaJQGiwyD0Ap',
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
				until_date : 2,
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
				until_date : 48,
			),
			participants_count : 32,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 96,
			color : $client->peerColor(
				color : 16,
				background_emoji_id : 5272734513770471650,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : 2441229887795345195,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 19,
			subscription_until_date : 62,
			bot_verification_icon : -2150868354678430689,
			send_paid_messages_stars : -8833836409082282774,
			linked_monoforum_id : -6219098384391685236,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1502638767065656889,
			access_hash : -160190703385602077,
			title : 'U7YhzLGQ6e8KJTuD',
			until_date : 1,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2122518620163913413,
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
			id : 5977940031718583546,
			access_hash : -3586947220809102815,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wK8U6gsN1iJxRHjY',
					reason : 's7RTjkUFlA983dXK',
					text : '4kWBMYRJUfI7XonC',
				),
			),
			bot_inline_placeholder : 'Fwcr1zTNbxv7jdJ5',
			lang_code : 'x8cAqkVtPB4L0152',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 30,
			color : $client->peerColor(
				color : 21,
				background_emoji_id : 8439910202946383990,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : -3251163884738690669,
			),
			bot_active_users : 8,
			bot_verification_icon : -6017829407981191939,
			send_paid_messages_stars : -3973576233948545701,
		),
	),
);
```