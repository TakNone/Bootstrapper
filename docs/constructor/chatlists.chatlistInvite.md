# chatlists.chatlistInvite

**Description** : *Info about a chat folder deep link &raquo;*

**Layer** : 211

```tl
chatlists.chatlistInvite#f10ece2f flags:# title_noanimate:flags.1?true title:TextWithEntities emoticon:flags.0?string peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **title_noanimate** | [`flags.1?true`](type/true) | NOTHING |
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
		text : 'eaKxHcFr0duI1QOb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 32,
				length : 0,
			),
			$client->messageEntityMention(
				offset : 70,
				length : 15,
			),
			$client->messageEntityHashtag(
				offset : 14,
				length : 76,
			),
			$client->messageEntityBotCommand(
				offset : 66,
				length : 81,
			),
			$client->messageEntityUrl(
				offset : 89,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 93,
				length : 38,
			),
			$client->messageEntityBold(
				offset : 48,
				length : 72,
			),
			$client->messageEntityItalic(
				offset : 19,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 26,
				length : 53,
			),
			$client->messageEntityPre(
				offset : 97,
				length : 77,
				language : 'xsmRACtnPT1XcIQW',
			),
			$client->messageEntityTextUrl(
				offset : 91,
				length : 96,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 75,
				length : 71,
				user_id : 4560782218818972305,
			),
			$client->inputMessageEntityMentionName(
				offset : 77,
				length : 91,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 32,
				length : 83,
			),
			$client->messageEntityCashtag(
				offset : 47,
				length : 49,
			),
			$client->messageEntityUnderline(
				offset : 57,
				length : 97,
			),
			$client->messageEntityStrike(
				offset : 39,
				length : 41,
			),
			$client->messageEntityBankCard(
				offset : 62,
				length : 87,
			),
			$client->messageEntitySpoiler(
				offset : 67,
				length : 82,
			),
			$client->messageEntityCustomEmoji(
				offset : 100,
				length : 70,
				document_id : -5088712627519719431,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 29,
				length : 31,
			),
		),
	),
	emoticon : 'yFxuzhe2gLKUlQWN',
	peers : array(
		$client->peerUser(
			user_id : 7533015365787128973,
		),
		$client->peerChat(
			chat_id : 737417677942178628,
		),
		$client->peerChannel(
			channel_id : -7521611447928937888,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6424716512135594974,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -236100859829188040,
			title : 'Co5zelyksQXEgrOJ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 39,
			date : 28,
			version : 62,
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
				until_date : 85,
			),
		),
		$client->chatForbidden(
			id : 5699790884255068765,
			title : 'QUWkIJ8KEu2tF5sV',
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
			id : -8858311614679772690,
			access_hash : 2615204264561456195,
			title : 'm7wQ3Pbz6IKt4fuq',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LYv7F2Wq8tMJl6Ao',
					reason : 'XG5qfsPJoW9lA0Tm',
					text : 'baV7f6mCt1YXP9qw',
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
				until_date : 93,
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
			participants_count : 57,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 33,
			color : $client->peerColor(
				color : 69,
				background_emoji_id : 5514546144503442606,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 1992682822293834737,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 58,
			subscription_until_date : 53,
			bot_verification_icon : 617763817710990774,
			send_paid_messages_stars : -5024311491952258263,
			linked_monoforum_id : 6642421405183474360,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5164225075450117573,
			access_hash : 4075495327517541907,
			title : 'KDSIYUR0bamljc3J',
			until_date : 54,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5832668291379480272,
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
			id : -124997138528151026,
			access_hash : -2587949689426903914,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EOBnqKS46XYgoWev',
					reason : 'fLJa3K9PkM14obqI',
					text : '7xT5XEymeLfBrkd3',
				),
			),
			bot_inline_placeholder : '1CP5cenmaFBKVUq9',
			lang_code : 'mazpMvDKJbIdWirF',
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
				color : 0,
				background_emoji_id : -890468033798101340,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : -8139416656187372123,
			),
			bot_active_users : 71,
			bot_verification_icon : 7745673794927389856,
			send_paid_messages_stars : 3476579061148530707,
		),
	),
);
```