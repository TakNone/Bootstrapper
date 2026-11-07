# WalletTransactionPeer

**Layer** : 233

```tl
walletTransactionPeerUser#d4ea706d flags:# user_id:long address:string domain:flags.0?string = WalletTransactionPeer;
walletTransactionPeerAddress#62cc1bc flags:# address:string domain:flags.0?string = WalletTransactionPeer;
walletTransactionPeerOnramp#e595186e flags:# address:string domain:flags.0?string provider_name:string = WalletTransactionPeer;
walletTransactionPeerUnsupported#728bed5a = WalletTransactionPeer;
walletTransactionPeerChannel#54e70c31 flags:# channel_id:long address:string domain:flags.0?string = WalletTransactionPeer;
walletTransactionPeerTelegramGift#f4729499 flags:# own_profile:flags.0?true = WalletTransactionPeer;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**walletTransactionPeerUser**](constructor/walletTransactionPeerUser) | NOTHING |
| [**walletTransactionPeerAddress**](constructor/walletTransactionPeerAddress) | NOTHING |
| [**walletTransactionPeerOnramp**](constructor/walletTransactionPeerOnramp) | NOTHING |
| [**walletTransactionPeerUnsupported**](constructor/walletTransactionPeerUnsupported) | NOTHING |
| [**walletTransactionPeerChannel**](constructor/walletTransactionPeerChannel) | NOTHING |
| [**walletTransactionPeerTelegramGift**](constructor/walletTransactionPeerTelegramGift) | NOTHING |