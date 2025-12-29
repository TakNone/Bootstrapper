# messages.chatsSlice

**Description** : *Partial list of chats, more would have to be fetched with pagination*

**Layer** : 218

```tl
messages.chatsSlice#9cd81144 count:int chats:Vector<Chat> = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of results that were found server-side (not all are included in chats) |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |

---

## Type

[messages.Chats](type/messages.Chats)

---

## Example

```php
$messagesChats = $client->messages->chatsSlice(
	count : 1,
	chats : array(
		$client->chatEmpty(
			id : -3193914696038371277,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1750520950081327296,
			title : '1ws04bR7ASZu2GCF',
			photo : $client->chatPhotoEmpty(),
			participants_count : 44,
			date : 69,
			version : 100,
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
				until_date : 95,
			),
		),
		$client->chatForbidden(
			id : -5486242585421402805,
			title : 'GC7OQgRbtmUyIBFV',
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
			id : -6348249981837029190,
			access_hash : -2993997263086135205,
			title : '3anyTgRGf9cKeJqB',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IcjU8XY56PyJlunQ',
					reason : '9TC3tn5ErskyjvNx',
					text : 'TPryGqZQ7lDCYXfv',
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
				until_date : 98,
			),
			participants_count : 36,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 24,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 129313763160487732,
			),
			profile_color : $client->peerColor(
				color : 21,
				background_emoji_id : 8584255977797437354,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 36,
			subscription_until_date : 78,
			bot_verification_icon : -8029892404208378955,
			send_paid_messages_stars : 2708082843093026655,
			linked_monoforum_id : -6660968176727578261,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5833820743622377744,
			access_hash : -6448168922620314638,
			title : '21ZWNYDf47phxJv3',
			until_date : 49,
		),
	),
);
```