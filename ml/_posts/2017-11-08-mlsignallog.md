---
layout: mlpost
title: "ML Signal Log"
date: 2017-11-08
---

November 8, 2017, 3:10 PM 

Generating a short excerpt of a signal with 2 periodic sin waves, and testing different simple NN architectures to reproduce the signal.

Findings:

- tanh activation function on all layers works best
- adam optimizer far outperforms sgd
- LSTMs and any other recurrence performs really slowly and inaccurately. CNNs are much, much better.

The following networks all demonstrate decent performance if the sequence length = 2000 (and the effective area to capture the period was determined to be 1000):


    x = Conv1D(128,128,dilation_rate=1,padding='causal',activation='tanh')(inputs)
    x = Conv1D(128,128,dilation_rate=2,padding='causal',activation='tanh')(x)
    x = Conv1D(128,128,dilation_rate=4,padding='causal',activation='tanh')(x)
    x = Conv1D(128,128,dilation_rate=8,padding='causal',activation='tanh')(x)


    x = Conv1D(64,64,dilation_rate=1,padding='causal',activation='tanh')(inputs)
    x = Conv1D(64,64,dilation_rate=2,padding='causal',activation='tanh')(x)
    x = Conv1D(64,64,dilation_rate=4,padding='causal',activation='tanh')(x)
    x = Conv1D(64,64,dilation_rate=8,padding='causal',activation='tanh')(x)
    x = Conv1D(64,64,dilation_rate=16,padding='causal',activation='tanh')(x)


    x = Conv1D(64,32,dilation_rate=1,padding='causal',activation='tanh')(inputs)
    x = Conv1D(64,32,dilation_rate=2,padding='causal',activation='tanh')(x)
    x = Conv1D(64,32,dilation_rate=4,padding='causal',activation='tanh')(x)
    x = Conv1D(64,32,dilation_rate=8,padding='causal',activation='tanh')(x)
    x = Conv1D(64,32,dilation_rate=16,padding='causal',activation='tanh')(x)
    x = Conv1D(64,32,dilation_rate=32,padding='causal',activation='tanh')(x)


    x = Conv1D(64,16,dilation_rate=1,padding='causal',activation='tanh')(inputs)
    x = Conv1D(64,16,dilation_rate=2,padding='causal',activation='tanh')(x)
    x = Conv1D(64,16,dilation_rate=4,padding='causal',activation='tanh')(x)
    x = Conv1D(64,16,dilation_rate=8,padding='causal',activation='tanh')(x)
    x = Conv1D(64,16,dilation_rate=16,padding='causal',activation='tanh')(x)
    x = Conv1D(64,16,dilation_rate=32,padding='causal',activation='tanh')(x)
    x = Conv1D(64,16,dilation_rate=64,padding='causal',activation='tanh')(x)


    x = Conv1D(32,8,dilation_rate=1,padding='causal',activation='tanh')(inputs)
    x = Conv1D(32,8,dilation_rate=2,padding='causal',activation='tanh')(x)
    x = Conv1D(32,8,dilation_rate=4,padding='causal',activation='tanh')(x)
    x = Conv1D(32,8,dilation_rate=8,padding='causal',activation='tanh')(x)
    x = Conv1D(32,8,dilation_rate=16,padding='causal',activation='tanh')(x)
    x = Conv1D(32,8,dilation_rate=32,padding='causal',activation='tanh')(x)
    x = Conv1D(32,8,dilation_rate=64,padding='causal',activation='tanh')(x)
    x = Conv1D(32,8,dilation_rate=128,padding='causal',activation='tanh')(x)

